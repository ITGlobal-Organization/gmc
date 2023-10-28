import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function useEventCalender() {
    const records = ref([]);
    const errors = ref([]);
    const record = ref({});


    const { errorAlert } = useService();
    const getAll = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/eventcalender/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const store = async(data) => {

        await axiosWrapper.post(`/admin/eventcalender`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/eventcalender/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/eventcalender/update/${id}`, data)
    }
    const get = async(id) => {
        await axiosWrapper.get(`/admin/eventcalender/${id}`).then((response) => {
            record.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getAllPublic = async() => {
        await axiosWrapper.get(`/eventcalender`).then((response) => {
            records.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/eventcalender/delete/${id}`);
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
