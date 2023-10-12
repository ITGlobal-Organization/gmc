import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import useService from '../services';

export default function useProducts() {
    const records = ref([]);
    const errors = ref([]);
    const record = ref({});


    const { errorAlert } = useService();
    const getAll = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/products/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            console.log(response)
            records.value = response.data.data
        }).catch((e) => {
            console.log(e.message)
            errorAlert(e.message);
        })
    }

    const store = async(data) => {

        await axiosWrapper.post(`/admin/products`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/products/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/products/update/${id}`, data)
    }
    const get = async(id) => {
        await axiosWrapper.get(`/admin/products/${id}`).then((response) => {
            console.log(response)
            record.value = response.data.data
        }).catch((e) => {
            console.log(e.message)
            errorAlert(e.message);
        })
    }
    const getAllPublic = async() => {
        await axiosWrapper.get(`/products`).then((response) => {
            console.log(response)
            records.value = response.data.data
        }).catch((e) => {
            console.log(e)
            errorAlert(e.message);
        })
    }
    const getSizeRecords = async(id) => {
        await axiosWrapper.get(`/admin/products/sizerecords/${id}`).then((response) => {

            records.value = response.data.data
        }).catch((e) => {

            errorAlert(e.message);
        })
    }
    const getTotalPrice = async(id,product_id,quantity) => {
        console.log("id",id)
        await axiosWrapper.get(`/admin/products/price/${id}/${product_id}/${quantity}`).then((response) => {
            console.log(response.data.data)
            records.value = response.data.data
        }).catch((e) => {
            console.log(e.message)
            errorAlert(e.message);
        })
    }

    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/products/delete/${id}`);
    }
    return {
        // getAll,
        getAllPublic,
        records,
        store,
        udpateStatus,
        // get,
        record,
        update,
        errors,
        _delete,
        getSizeRecords,
        getTotalPrice
    }
}
