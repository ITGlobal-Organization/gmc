import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import useService from '../services';

export default function useCategories() {
    const records = ref([]);
    const errors = ref([]);
    const record = ref({});
    

    const { errorAlert } = useService();
    const getAll = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/directory/categories/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const store = async(data) => {

        await axiosWrapper.post(`/admin/directory/categories`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/directory/categories/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/directory/categories/update/${id}`, data)
    }
    const get = async(id) => {
        await axiosWrapper.get(`/admin/directory/categories/${id}`).then((response) => {
            record.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getAllPublic = async(search) => {
        await axiosWrapper.get(`/directories/categories?search=${search}`).then((response) => {
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    
    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/directory/categories/delete/${id}`);
    }
    return {
        getAll,
        getAllPublic,
        records,
        store,
        udpateStatus,
        get,
        record,
        update,
        errors,
        _delete
    }
}