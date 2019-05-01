<?php
include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Books</title>
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="assets/CSS/dataTables.bootstrap.min.css"> -->
    

     <!-- jQuery -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.css"/>
 
     <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/r-2.2.2/datatables.min.js"></script>
 


</head>

<body>

    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <?php
            include("sidebar.php");
            ?>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" >
            <div class="container-fluid" >
                <div class="container" style="margin-top:30px;">


                    <div class="row" style="margin-left:-70px;" >
                        <div class="col-md-12 col-md-offset-2">
                            <h2><i class="fas fa-book"></i> Books</h2><br>
                            
                            <table class="table table-hover table-bordered" style="width:1200px; font-size:14px;"">
                                <thead>
                                    <tr style="font-weight:bold; font-family:Lato;">
                                        <td>ID</td>
                                        <td>ISBN</td>
                                        <td>Title</td>
                                        <td>Author</td>
                                        <td>Year</td>
                                        <td>Category</td>
                                       
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/JS/bootstrap.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

            <script type="text/javascript">
               $(document).ready(function() {
                        $("#addNew").on('click', function () {
                        $("#tableManager").modal('show');
                    });

                     getExistingData(0, 10);

                });

                
       
                function getExistingData(start, limit) {
                    $.ajax({
                        url: 'includes/handlers/ajax_load_books.php',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            key: 'getExistingData',
                            start: start,
                            limit: limit
                        }, success: function (response) {
                            if (response != "reachedMax") {
                                $('tbody').append(response);
                                start += limit;
                                getExistingData(start, limit);
                            }else
                                $(".table").DataTable();
                        }
                    });
                }


            </script>

            

</body>

</html>