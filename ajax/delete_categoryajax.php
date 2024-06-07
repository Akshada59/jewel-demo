<!-- phpcode for delete -->

<?php
                        // Include your database connection file here
                        include("../../config/connect.php");

                        if (isset($_GET['id'])) {
                            $categoryId = $_GET['id'];
                            
                            // Delete the category from the database
                            $deleteQuery = "DELETE FROM `category` WHERE `category_id` = $categoryId";
                            $result = mysqli_query($con, $deleteQuery);

                            if ($result) {
                                 // Redirect to the same page after successful deletion
                                echo '<script>window.location.href = "../../main/admin/adminpart.php";</script>';
                                exit;
                            } else {
                                echo "Error deleting category.";
                            }
                        } else {
                            echo "Category ID not provided.";
                        }
                    ?>


                    <!-- end of delete -->