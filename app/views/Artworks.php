<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>



<div class="row py-5 px-4">
  <div class="">

    <!-- Profile widget -->
    <div class="bg-white shadow rounded overflow-hidden">
      <div class="py-4 px-4 position-relative" >

        <div class="row mb-5" id="paginated-list">



          <?php foreach ($data['artworks'] as $artwork) : ?>
            <!-- pagination here -->
            <a href="<?= URLROOT ?>artworkController/artwork/<?= $artwork->artwork_id ?>" class="rowartworks artworks">
              <div class="col-lg-3 mb-2 pr-lg-1 divImageArtWork mt-5 mx-4 ">
                <img src="<?= URLROOT ?>img/<?= $artwork->image ?>" alt="" class="img-fluid  shadow-sm p_i">

                <!-- TITLE -->
                <!-- PRICE HERE -->
                <!-- CATEGORY -->
                <div class="widget-49-meeting-info mt-3">
                  <span class="widget-49-pro-title mt-5">By- <?= $artwork->name ?></span><br>
                  <span class="widget-49-pro-title ">Named- <?= $artwork->title ?></span><br>
                  <span class="widget-49-pro-title "><?= $artwork->price . 'DH' ?></span><br>
                </div>

              </div>
            </a>
          <?php endforeach ?>






        </div>

        <nav class="pagination-container position-absolute bottom-0 start-50 translate-middle-x mb-2">

          <div id="pagination-numbers">

          </div>
        </nav>

      </div>
    </div>
  </div>
</div>






<style>
  .hidden {
    display: none;
  }

  .pagination-container {
    width: calc(100% - 2rem);
    display: flex;
    align-items: flex-end;
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
    background: #bde0fe;
  }

  .pagination-number.active {
    color: #fff;
    background: #480ca8;
  }
</style>


<script>
  const paginationNumbers = document.getElementById("pagination-numbers");
  const paginatedList = document.getElementById("paginated-list");
  const listItems = paginatedList.querySelectorAll(".artworks");

  const paginationLimit = 11;
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
    console.log(pageCount + " fdfdfefe")
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
        console.log(index + " z")
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



<?php
include_once APPROOT . '/views/includes/footer.php';
?>