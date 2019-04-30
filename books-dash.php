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
            include("sidebar-dash.php");
            ?>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper" >
            <div class="container-fluid" >
                <div class="container" style="margin-top:30px;">

                <!-- Modal -->
                    <div id="tableManager" class="modal fade">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Add New Book</h2>

                                    </div>
                                
                                <div class="modal-body">
                                    <input type="text" id="isbn" class="form-control" placeholder="ISBN"><br>
                                    <input type="text" id="title" class="form-control" placeholder="Title"><br>
                                    <input type="text" id="author" class="form-control" placeholder="Author"><br>
                                    <input type="text" id="year" class="form-control" placeholder="Year"><br>
                                    <input type="text" id="category" class="form-control" placeholder="Category"><br>
                                    <input type="text" id="copies" class="form-control" placeholder="Number of copies"><br>
                                    <label for="type">Item type</label>
                                    <select id="type">
                                        <option value="Public">Public</option>
                                        <option value="Rare">Rare</option>
                                    </select>
                                    



                                    <!-- <textarea class="form-control" id="desc" placeholder=""></textarea> -->
                                </div>

                                <div class="modal-footer">
                                    <input type="button" onclick="manageData('addNew')" value="Save" class="btn btn-success">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-left:-70px;" >
                        <div class="col-md-12 col-md-offset-2">
                            <h2><i class="fas fa-book"></i> Books</h2><br>
                            <input style="float: left" type="button" class="btn btn-danger" id="addNew" value="Add New">
                            <br><br><br>
                            <table class="table table-hover table-bordered" style="width:1200px; font-size:14px;"">
                                <thead>
                                    <tr style="font-weight:bold; font-family:Lato;">
                                        <td>ID</td>
                                        <td>ISBN</td>
                                        <td>Title</td>
                                        <td>Author</td>
                                        <td>Year</td>
                                        <td>Category</td>
                                        <td>No.of Copies</td>
                                        <td>Item Type</td>
                                        <td>Options</td>
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
                        url: 'includes/handlers/ajax_books.php',
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

                function manageData(key){
                    var isbn = $("#isbn");
                    var title = $("#title");
                    var author = $("#author");
                    var year = $("#year");
                    var category = $("#category");
                    var copies = $("#copies");
                    var type = $("#type")


                    if (isNotEmpty(isbn) && isNotEmpty(title) && isNotEmpty(author) && isNotEmpty(year) && isNotEmpty(category) && isNotEmpty(copies) && isNotEmpty(type)) {
                            $.ajax({
                            url: 'includes/handlers/ajax_books.php',
                            method: 'POST',
                            dataType: 'text',
                            data: {
                                key: key,
                                isbn: isbn.val(),
                                title: title.val(),
                                author: author.val(),
                                year: year.val(),
                                category: category.val(),
                                copies: copies.val(),  
                                type: type.val()  


                            }, success: function (response) {
                                    alert(response);
                            }
                            });
                        }
                    }

                    function isNotEmpty(caller) {
                        if (caller.val() == '') {
                            caller.css('border', '1px solid red');
                            return false;
                        } else
                            caller.css('border', '');

                        return true;
                    }
                


            </script>

            

</body>

</html>