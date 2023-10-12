import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function usePages() {
    const pages = ref([]);
    const errors = ref([]);
    const page = ref({});
    const { errorAlert } = useService();
    const getPages = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/pages/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            pages.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const storePage = async(data) => {

        await axiosWrapper.post(`/admin/pages`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/pages/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/pages/update/${id}`, data)
    }
    const getPage = async(id) => {
        await axiosWrapper.get(`/admin/pages/${id}`).then((response) => {
            page.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getPagesPublic = async() => {
        await axiosWrapper.get(`/pages`).then((response) => {
            pages.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    
    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/pages/delete/${id}`);
    }
    return {
        getPages,
        getPagesPublic,
        pages,
        storePage,
        udpateStatus,
        getPage,
        page,
        update,
        errors,
        _delete
    }
}