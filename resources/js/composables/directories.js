import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function useDirectory() {
    const records = ref([]);
    const errors = ref([]);
    const record = ref({});


    const { errorAlert } = useService();
    const getAll = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/directory/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const store = async(data) => {

        await axiosWrapper.post(`/admin/directory`, data);
    }
    const updateStatus = async(data) => {
        await axiosWrapper.post(`/admin/directory/update/status`, data)
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/directory/update/${id}`, data)
    }
    const get = async(id) => {
        await axiosWrapper.get(`/admin/directory/${id}`).then((response) => {
            record.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getAllPublic = async() => {
        await axiosWrapper.get(`/directory`).then((response) => {
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/directory/delete/${id}`);
    }
    return {
        getAll,
        getAllPublic,
        records,
        store,
        updateStatus,
        get,
        record,
        update,
        errors,
        _delete
    }
}
