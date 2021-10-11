<?php
                  
                   if (isset($_POST["submit"])) {
                        $message = $_POST["message"]; 

                        require_once 'dbh.inc.php';
                        require_once 'functions.inc.php';

                        saveMessage($conn , $message);
                    }else {
                         header("location: ../portfolio.php");
                        exit();
                    }


                   ?>