import { createToaster } from "@meforma/vue-toaster";
import ref from 'vue';

const toaster = createToaster({ /* options */ });

export default function useService() {
    // const loader = ref(false);
    function confirmAlert(success, message = '', confirm_color = '#d32525', deny_color = '#6c757d') {
        return swal.fire({
            title: 'Are you sure?',
            text: message,
            icon: 'warning',
            showDenyButton: true,
            confirmButtonText: 'Yes',
            confirmButtonColor: confirm_color,
            denyButtonText: `No`,
            denyButtonColor: deny_color,
        }).then((result) => {
            if (result.isConfirmed) {
                success()
            }
        });
    }

    function successAlert(message) {
        swal.fire(
            'Successful',
            message,
            'success'
        )
    }
    function warningAlert(message){
         swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: message,
            footer: ''
          })
    }

    function notifyAlert(message) {
        toaster.info(message)
    }

    function errorAlert(message) {
        toaster.error(message)
    }

    // function showLoader(){
    //     loader.value = true;
    //     return
    // }
    // function hideLoader(){
    //     loader.value = false;
    //     return
    // }
    return {
        confirmAlert,
        successAlert,
        errorAlert,
        notifyAlert,
        warningAlert,
        // showLoader,
        // hideLoader,
    }

}
