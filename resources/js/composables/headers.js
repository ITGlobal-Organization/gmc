import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function useHeaders() {
    const headers = ref([]);
    const errors = ref([]);
    const header = ref({});
    const { errorAlert } = useService();
    const getHeaders = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/headers/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            headers.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const storeHeader = async(data) => {

        await axiosWrapper.post(`/admin/headers`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/headers/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/headers/update/${id}`, data)
    }
    const getHeader = async(id) => {
        await axiosWrapper.get(`/admin/headers/${id}`).then((response) => {
            header.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    // const getHeadersPublic = async() => {
    //     await axiosWrapper.get(`/headers`).then((response) => {
    //         headers.value = response.data.data
    //     }).catch((e) => {
    //         errorAlert(e.message);
    //     })
    // }
    
    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/headers/delete/${id}`);
    }
    return {
        getHeaders,
        //getHeadersPublic,
        headers,
        storeHeader,
        udpateStatus,
        getHeader,
        header,
        update,
        errors,
        _delete
    }
}