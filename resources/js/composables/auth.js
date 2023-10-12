import { ref } from 'vue'
import axios from 'axios'
import { useRouter } from 'vue-router';
import { axiosWrapper } from '../helpers/index';
import useService from '../services/';

export default function useAuth() {
    const code = ref([]);
    const errors = ref([]);
    const router = useRouter()


    const login = async(user) => {
        const { errorAlert,showLoader,hideLoader } = useService();
        await axiosWrapper.post('/login',user).then((response) => {

            localStorage.setItem('user', JSON.stringify(response.data.data.user));
            localStorage.setItem('token', response.data.data.token);
            localStorage.setItem('route', response.data.data.route);

            window.location.href = response.data.data.route + '/';


        }).catch((e) => {
            if (e.response.status === 422) {
                errorAlert(e.message)
                errors.value = e.response.data.errors
            } else if (e.response.status == 500) {
                errorAlert(e.message)
            } else {
                errorAlert(e.response.data.message)
            }

        });

    }

    const signIn = async() => {
        const { errorAlert,showLoader,hideLoader } = useService();
        await axiosWrapper.post('/employee/signin').then((response) => {

            localStorage.setItem('user', JSON.stringify(response.data.data.user));
            localStorage.setItem('token', response.data.data.token);
            localStorage.setItem('route', response.data.data.route);
            window.location.href = response.data.data.route + '/';


        }).catch((e) => {
            if (e.response.status === 422) {
                errorAlert(e.message)
                errors.value = e.response.data.errors
            } else if (e.response.status == 500) {
                errorAlert(e.message)
            } else {
                errorAlert(e.response.data.message)
            }

        });
    }

    const signOut = async() => {
        const { errorAlert,showLoader,hideLoader } = useService();
        await axiosWrapper.get(`/employee/signout`).then((response) => {
            console.log(response.data)

            localStorage.setItem('user', JSON.stringify(response.data.data.user));
            localStorage.setItem('token', response.data.data.token);
            localStorage.setItem('route', response.data.data.route);

            window.location.href = response.data.data.route + '/';


        }).catch((e) => {
            console.log(e.response)
            if (e.response.status === 422) {
                errorAlert(e.message)
                errors.value = e.response.data.errors
            } else if (e.response.status == 500) {
                errorAlert(e.message)
            } else {
                errorAlert(e.response.data.message)
            }
        });
    }
    const getAttendance = async()=>{
        const { errorAlert} = useService();
        return await axiosWrapper.get(`/employee/getattendance`).then((response) => {
            let obj={
                'is_signin':'',
                'workingTime':'',
                'signin_at':''
            }
            if(response.data.data.is_signin){
                    obj.is_signin=response.data.data.is_signin,
                    obj.workingTime=response.data.data.workingTime,
                    obj.signin_at=response.data.data.signin_at
                return obj;
            }else{
                    obj.is_signin=response.data.data.is_signin,
                    obj.workingTime=response.data.data.workingTime,
                    obj.signin_at=response.data.data.signin_at
                return obj;
            }
        }).catch((e) => {
            console.log(e)
            if (e.response.status === 422) {
                errorAlert(e.message)
                errors.value = e.response.data.errors
            } else if (e.response.status == 500) {
                errorAlert(e.message)
            } else {
                errorAlert(e.response.data.message)
            }

        });
    }
    

    const signUp = async(data) => {
        const { errorAlert } = useService();
        await axiosWrapper.post(`/register`, data).then((response) => {

            localStorage.setItem('dashboard', response.data.data.dasboard);
            localStorage.setItem('user', response.data.data.user);
            localStorage.removeItem('user_type');
            window.location.href = response.data.data.route;

        }).catch((e) => {
            if (e.response.status === 422) {
                errors.value = e.response.data.errors
            } else if (e.response.status == 500) {
                errorAlert(e.message)
            } else {

                errorAlert(e.response.data.message)
            }
        });
    }

    const updateProfile = async(url, data) => {

        return await axiosWrapper.post(url, data)
    }
    return {
      
        signUp,
        errors,
        updateProfile,
        signIn,
        login,
        signOut,
        getAttendance
    }
}
