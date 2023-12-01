<?php

class toast {

    //METHOD FOR SUCCESS TOAST
    public static function success($message, $title = "Success") {
        return self::displayToast($message, 'success');
    }

    //METHOD FOR WARNING TOAST
    public static function warning($message, $title = "Warning") {
        return self::displayToast($message, 'warning'); 
    }

    //METHOD FOR ERROR TOAST
    public static function error($message, $title = "Error") {
        return self::displayToast($message, 'error');
    }

    
    private static function displayToast($message, $type) {

        //CREATE A JAVASCRIPT CODE SNIPPET THAT TRIGGERS THE SPECIFIED TOASTR NOTIFICATION
        switch ($type) {
            case 'success':
                $method = 'toastr.success'; //TOASTR SUCCESS NOTIFICATION
                break;

            case 'warning':
                $method = 'toastr.warning'; //TOASTR WARNING NOTIFICATION
                break;

            case 'error':
                $method = 'toastr.error'; //TOASTR ERROR NOTIFICATION
                break;

            default:
                $method = 'toastr.success'; //DEFAULT TO SUCCESS TOASTR NOTIFICATION
        }


        //RETURN THE GENERATED JAVASCRIPT CODE FOR TOASTR
        $script = '
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script>
            $(document).ready(function() {
                ' . $method . '("' . $message . '", "SYSTEM NOTIFY", {
                    closeButton: true,
                    progressBar: true,
                    positionClass: "toast-top-right",
                    timeOut: 3000
                });
            });
        </script>';

        return $script;
    }
}


?>
