<?php
// here we find the queries that we going to pass to the database
    class Query {
//       Create Qeries - the values that we going to pass comes from view folder
        function  CreateBooking($_values){
            $query = "INSERT INTO booking (booking_id, fk_customer_id, booking_from, booking_to) VALUES(?,?,?,?)";
            $parameters = [
                $_values['knumber'],
                $_values['lecture']
            ];
            return $this->Create($query, $parameters);

        }

//         Read Queries
        function  ReadBooking(){
            $query = "SELECT * FROM booking";
            $class = 'Attend';
            return $this->Read($query, $class);
        }

//           Update Queries
        function UpdateLecture($_id, $_value){
            $query ="   UPDATE attend SET lecture_id =? WHERE attend_id =?";
            $parameters = [
                $_value,
                $_id
            ];
            return $this->Update($query, $parameters);
        }

//           Delete Queries
        function DeleteAttendance($_id){
            $query = "DELETE FROM attend WHERE attend_id =?";
            $parameters = [
                $_id
            ];
            return $this->Delete($query, $parameters);

        }

    }
?>