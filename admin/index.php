<?php

require_once "../config/conn.php";


$ux = $conn->query("SELECT * FROM ui_ux");


$row_count = 1;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portfolio" />
    <meta name="author" content="Cj Abarca" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="./js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="../public/css/fonts.css" />
    <link rel="icon" type="image/x-icon" href="../public/uploads/favicon.svg" />

    <link rel="stylesheet" href="./style/header.css" />
    <link rel="stylesheet" href="./style/aside.css" />
    <link rel="stylesheet" href="./style/main.css" />
    <link rel="stylesheet" href="./style/ui-ux.css" />
    <link rel="stylesheet" href="./style/dataTables.dataTables.css" />
    <title>Bobing Portfolio</title>
    <!-- Google tag (gtag.js) -->

</head>

<body>
    <?php include('theme/header.php'); ?>

    <div class="dashboard">
        <?php include('theme/sidebar.php'); ?>
        <main class="main">
            <section>
                <h1>Hello World</h1>
                <div class="ui-ux">
                    <table id="ui_ux">
                        <thead>
                            <tr>
                                <th>Num.</th>
                                <th>Image</th>
                                <th>Label</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ux as $item): ?>
                                <tr>
                                    <td><?= $row_count ?></td>
                                    <td>
                                        <div class="imageholder-ux">
                                            <img src="../public/images/<?= $item['image'] ?>" alt="" srcset="">
                                        </div>
                                    </td>
                                    <td><?= $item['heading'] ?></td>
                                    <td>
                                        <div class="action">
                                            <!-- <button style="background-color: var(--secondary-4);" class="viewUx">
                                                <img src="../public/uploads/view.svg">
                                            </button> -->

                                            <!-- Modal trigger button -->
                                            <button
                                                style="background-color: var(--secondary-4);"
                                                type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#viewDesign">
                                                <img src="../public/uploads/view.svg">
                                            </button>

                                            <button
                                                style="background-color: var(--secondary-3);"
                                                type="button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editDesign">
                                                <img src="../public/uploads/edit.svg">
                                            </button>


                                        </div>
                                    </td>
                                </tr>
                            <?php
                                $row_count++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>

    </div>





    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div
        class="modal fade"
        id="viewDesign"
        tabindex="-1"
        data-bs-backdrop="static"
        data-bs-keyboard="false"

        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div
            class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Modal title
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">Body</div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    <div
        class="modal fade"
        id="editDesign"
        tabindex="-1"
        data-bs-backdrop="static"
        data-bs-keyboard="false"

        role="dialog"
        aria-labelledby="modalTitleId"
        aria-hidden="true">
        <div
            class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
            role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Modal title
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">Body</div>
                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>






    <script src="./js/dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // alert('akjsdhakjdsh');
            // $("#ui_ux").dataTable();
            new DataTable("#ui_ux");
        })
    </script>
</body>

</html>