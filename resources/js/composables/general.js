import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services/';


export default function useGenerals() {

    const data = ref([]);
    const counters = ref([]);
    const registrations = ref([]);
    // const errors = ref([]);
    // const category = ref({});
    const { errorAlert } = useService();

    const get = async(url) => {
        await axiosWrapper.get(url).then((response) => {
            data.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const getCitiesByCountry = async() => {
        await axiosWrapper.post('https://countriesnow.space/api/v0.1/countries/cities',{
            "country": "pakistan"
        }).then((response) => {
            data.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    

    const getCounters = async() => {
        return await axiosWrapper.get(`/admin/ajax`).then((response) => {
            counters.value = response.data.data;
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

    const getRegistrations = async(year) => {
        return await axiosWrapper.get(`/admin/registrations/month?year=${year}`).then((response) => {
            registrations.value = response.data.data;
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

    const uploadMedia = async (data,progress) => {
        return await axiosWrapper.post('/media/upload',data,progress);
    }

    const deletMedia = async (id) => {
        return await axiosWrapper.destroy('/media/delete/'+id);
    }

    return {
        data,
        get,
        getCitiesByCountry,
        getCounters,
        counters,
        getRegistrations,
        registrations,
        uploadMedia,
        deletMedia
        
        
    }
}