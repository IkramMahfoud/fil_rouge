<?php
include_once APPROOT . '/views/includes/header.php';
include_once APPROOT . '/views/includes/navbar.php';
?>





<!-- VERSION UNE -->
<div class="container mise_en_page" style="margin-bottom :70px;">
    <div style="margin-top: 100px;">
        <p class="fw-light  text-center py-3 rounded-3" style="background: #ff006e; color:#edf6f9;">BackOffice</p>

        <div style="margin-top: 30px;">

            <div style="margin-top: 20px; " class="text-center">


                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">SIGNAL</th>
                            <th scope="col">DESCRIPTION</th>
                            <th scope="col">ARTWORK<!-- title --></th>
                            <th scope="col">PRICE</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>


                    <tbody>
                        <!-- <?php foreach ($data['signal'] as $signal) : ?> -->
                        <!-- LOOP HERE FOR DATA FROM CONTROLLER -->

                        <tr>
                            <th scope="row"><?= $signal->signal_id ?></th>
                            <td scope="row"><?= $signal->descreption ?></td>
                            <td scope="row"><?= $signal->title ?></td>
                            <td scope="row"><?= $signal->price ?>DH</td>


                            <td>
                                <!-- DELETE BY ID -->
                                <a href="<?= URLROOT . 'signalsController/cancel/' . $signal->signal_id ?>" class="btn btn-warning mb-1" style="width:94px;height:34px;font-size:13px; ">
                                    cancel
                                </a>
                                <a href="<?= URLROOT . 'signalsController/confirm/' . $signal->artwork_id . '/' . $signal->signal_id ?>" class="btn btn-danger" style="width:94px;height:34px;font-size:13px;">
                                    confirm
                                </a>

                            </td>
                        </tr>
                        <!-- END LOOP -->
                        <!-- <?php endforeach ?> -->
                    </tbody>
                </table>

            </div>


        </div>
    </div>
</div>







<?php
include_once APPROOT . '/views/includes/footer.php';
?>