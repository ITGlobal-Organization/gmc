import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import useService from '../services';

export default function useEmployees() {
    const records = ref([]);
    const errors = ref([]);
    const record = ref({});


    const { errorAlert } = useService();
    const getAll = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/employees/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            records.value = response.data.data;
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const store = async(data) => {

        await axiosWrapper.post(`/admin/employees`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/employees/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/employees/update/${id}`, data)
    }
    const get = async(id) => {
        await axiosWrapper.get(`/admin/employees/${id}`).then((response) => {
            record.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getAllPublic = async() => {
        await axiosWrapper.get(`/employees`).then((response) => {
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/employees/delete/${id}`);
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
