<?php

class DbHelper
{


    private $conn;


    function createDbConnection()
    {
        try {
            $this->conn = new mysqli("localhost", "root", "", "api_std");
        } catch (Exception $error) {
            echo $error->getMessage();

        }
    }

    function insertNewStudent($name, $email, $phone)
    {
        try {
            $sql = "INSERT INTO `student` (`id`, `name`, `email`, `phone`) VALUES (NULL, '$name', '$email', '$phone');";
            $result = $this->conn->query($sql);
            if ($result == true) {
                echo json_encode(array("success" => true,
                    "message" => "new user has been addedd"
                ));
            } else {
                echo json_encode(array("success" => false,
                    "message" => "new user has not been addedd"
                ));
            }

        } catch (Exception $error) {
            $this->createResponse(false, $error->getMessage());


        }
    }

    function getAllStudents()
    {
        try {
            $sql = "select * from student";
            $result = $this->conn->query($sql);
            $count = $result->num_rows;
            if ($count > 0) {
                $all_students_array = array();
                while ($row = $result->fetch_assoc()) {
                    $id = $row["id"];
                    $name = $row["name"];
                    $email = $row["email"];
                    $phone = $row["phone"];
                    $student_array = $this->createStudentResponse($id, $name, $email, $phone);
                    array_push($all_students_array, $student_array);
                }
                $this->createResponse(true, $count, $all_students_array);
            } else {
                throw  Exception("No Data Found");
            }
        } catch (Exception $exception) {
            $this->createResponse(false, 0, array("error" => $exception->getMessage()));
        }


    }

    function deleteStudent($id)
    {
        try {
            $sql = "delete from student where id = $id";
            $result = $this->conn->query($sql);

            if (mysqli_affected_rows($this->conn) > 0) {
                $this->createResponse(true, 1, array("data" => "student has been deleted"));
            } else {
                throw new Exception("There are no students with the passed id");
            }
        } catch (Exception $exception) {
            $this->createResponse(false, 0, array("error" => $exception->getMessage()));
        }
    }


    function updateStudent($id, $name, $email, $phone)
    {

        $sql = "select * from student where id = $id";
        $result = $this->conn->query($sql);

        try {
            if ($result->num_rows == 0) {
                throw new Exception("there are no students with the passed id");
            } else {
                $sql = "UPDATE `student` SET `name` = '$name', `email` = '$email', `phone` = '$phone' WHERE `student`.`id` = $id;";
                $result = $this->conn->query($sql);
                if ($result == true) {
                    echo json_encode(array("success" => true,
                        "message" => " user success updateed"
                    ));
                } else {
                    echo json_encode(array("success" => false,
                        "message" => "not user by id passed"
                    ));
                }
            }
        } catch (Exception $exception) {
            http_response_code(400);
            $this->createResponse(false, 0, array("error" => $exception->getMessage()));
        }


    }


    function createResponse($isSuccess, $count, $data)
    {
        echo json_encode(array(
            "success" => $isSuccess,
            "count" => $count,
            "data" => $data
        ));
    }

    function createStudentResponse($id, $name, $email, $phone)
    {
        return array(
            "id" => $id,
            "name" => $name,
            "email" => $email,
            "phone" => $phone,

        );
    }
}

?>