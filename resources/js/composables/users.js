import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import useService from '../services';

export default function useUsers() {
    const records = ref([]);
    const errors = ref([]);
    const record = ref({});


    const { errorAlert } = useService();
    const getAll = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/users/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            records.value = response.data.data;
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const store = async(data) => {

        await axiosWrapper.post(`/admin/users`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/users/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/users/update/${id}`, data)
    }
    const get = async(id) => {
        await axiosWrapper.get(`/admin/users/${id}`).then((response) => {
            record.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getAllPublic = async() => {
        await axiosWrapper.get(`/admin/users/user`).then((response) => {
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getAllImages = async() => {
        await axiosWrapper.get(`/admin/images`).then((response) => {
            console.log(response.data.data)
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const getRoles =async() => {
        await axiosWrapper.get(`/admin/users/roles`).then((response) => {
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/users/delete/${id}`);
    }
    return {
        getAll,
        getAllPublic,
        getAllImages,
        records,
        store,
        udpateStatus,
        get,
        record,
        update,
        errors,
        _delete,
        getRoles
    }
}
