<?php

    $hname = 'localhost';
    $uname = 'root';
    $pass  = '';
    $db = 'tourist';
    
    $con = mysqli_connect($hname,$uname,$pass,$db);

    if(!$con){
        die("Cannot Connect to Database".mysqli_connect_error());
    }

    function filteration($data){
        foreach ($data as $key => $value) {
            $value = trim($value);
            $value = stripslashes($value);
            $value = strip_tags($value);      
            $value = htmlspecialchars($value);
            $data[$key] = $value;
        }
        return $data;
    }

    function select($query,$values,$datatypes)
    {
        $con = $GLOBALS['con'];
        # first we have to prepare the query
        if($stmt = mysqli_prepare($con,$query)) {
            # second we have to bind values with query
            if(mysqli_stmt_bind_param($stmt,$datatypes,...$values)){  #splat operator for give multi value
                # third we have to execute the query
                if(mysqli_stmt_execute($stmt)) {
                    # fourth we have to get the result of executed query
                    $res = mysqli_stmt_get_result($stmt);
                    #and lastly return the $res variable that contains all rows of the table
                    mysqli_stmt_close($stmt);
                    return $res;
                } else {
                    mysqli_stmt_close($stmt);
                    die("Query cannot be executed - Select");
                }
            } else {
                mysqli_stmt_close($stmt);
                die("Query cannot be binded - Select");
            }
        } else {
            die("Query cannot be prepared - Select");
        }
    }

    function update($query,$values,$datatypes)
    {
        $con = $GLOBALS['con'];
        # first we have to prepare the query
        if($stmt = mysqli_prepare($con,$query)) {
            # second we have to bind values with query
            if(mysqli_stmt_bind_param($stmt,$datatypes,...$values)){  #splat operator for give multi value
                # third we have to execute the query
                if(mysqli_stmt_execute($stmt)) {
                    # fourth we have to get the result of executed query
                    $res = mysqli_stmt_affected_rows($stmt);
                    #and lastly return the $res variable that contains all rows of the table
                    mysqli_stmt_close($stmt);
                    return $res;
                } 
                else {
                    mysqli_stmt_close($stmt);
                    die("Query cannot be executed - Update");
                }
            } 
        } else {
            die("Query cannot be prepared - Update");
        }
    }

?>