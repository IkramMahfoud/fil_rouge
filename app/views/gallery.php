<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>


  

<style>
    .hidden {
        display: none;
    }

    .pagination-container {
        width: calc(100% - 2rem);
        display: flex;
        align-items: center;
        position: absolute;
        bottom: -50px;
        justify-content: center;
    }

    .pagination-number,
    .pagination-button {
        font-size: 1.1rem;
        background-color: transparent;
        border: none;
        margin: 0.25rem 0.25rem;
        cursor: pointer;
        height: 2.5rem;
        width: 2.5rem;
        border-radius: .2rem;
    }

    .pagination-number:hover,
    .pagination-button:not(.disabled):hover {
        background: #fff;
    }

    .pagination-number.active {
        color: #fff;
        background: #0085b6;
    }
</style>


<script>
    const paginationNumbers = document.getElementById("pagination-numbers");
    const paginatedList = document.getElementById("paginated-list");
    const listItems = paginatedList.querySelectorAll(".cruisesItem");

    const paginationLimit = 1;
    const pageCount = Math.ceil(listItems.length / paginationLimit);
    let currentPage = 1;

    const appendPageNumber = (index) => {
        const pageNumber = document.createElement("button");
        pageNumber.className = "pagination-number";
        pageNumber.innerHTML = index;
        pageNumber.setAttribute("page-index", index);
        pageNumber.setAttribute("aria-label", "Page " + index);

        paginationNumbers.appendChild(pageNumber);
    };

    const getPaginationNumbers = () => {
        for (let i = 1; i <= pageCount; i++) {
            appendPageNumber(i);
        }
    };

    const handleActivePageNumber = () => {
        document.querySelectorAll(".pagination-number").forEach((button) => {
            button.classList.remove("active");
            const pageIndex = Number(button.getAttribute("page-index"));
            if (pageIndex == currentPage) {
                button.classList.add("active");
            }
        });
    };

    const setCurrentPage = (pageNum) => {
        currentPage = pageNum;
        handleActivePageNumber();

        const prevRange = (pageNum - 1) * paginationLimit;
        const currRange = pageNum * paginationLimit;

        listItems.forEach((item, index) => {
            item.classList.add("hidden");
            if (index >= prevRange && index < currRange) {
                item.classList.remove("hidden");
            }
        });
    };

    window.addEventListener("load", () => {
        getPaginationNumbers();
        setCurrentPage(1);

        document.querySelectorAll(".pagination-number").forEach((button) => {
            const pageIndex = Number(button.getAttribute("page-index"));

            if (pageIndex) {
                button.addEventListener("click", () => {
                    setCurrentPage(pageIndex);
                });
            }
        });
    });

</script>

