import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function useDevelopers() {
    const developers = ref([]);
    const errors = ref([]);
    const developer = ref({});
    

    const { errorAlert } = useService();
    const getDevelopers = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/developers/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            developers.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const storeDeveloper = async(data) => {
        await axiosWrapper.post(`/admin/developers`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/developers/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/developers/update/${id}`, data)
    }
    const getDeveloper = async(id) => {
        await axiosWrapper.get(`/admin/developers/${id}`).then((response) => {
            developer.value = response.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getDevelopersPublic = async() => {
        await axiosWrapper.get(`/developers/select`).then((response) => {
            developers.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    
    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/developers/delete/${id}`);
    }
    return {
        getDevelopers,
        getDevelopersPublic,
        developers,
        storeDeveloper,
        udpateStatus,
        getDeveloper,
        developer,
        update,
        errors,
        _delete
    }
}