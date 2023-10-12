import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function useProperties() {
    const properties = ref([]);
    const errors = ref([]);
    const property = ref({});
    

    const { errorAlert } = useService();
    const getProperties = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/properties/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            properties.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const storeProperty = async(data) => {

        await axiosWrapper.post(`/admin/properties`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/properties/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/properties/update/${id}`, data)
    }
    const getProperty = async(id) => {
        await axiosWrapper.get(`/admin/properties/${id}`).then((response) => {
            property.value = response.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getPropertiesPublic = async() => {
        await axiosWrapper.get(`/properties`).then((response) => {
            properties.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    
    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/properties/delete/${id}`);
    }
    return {
        getProperties,
        getPropertiesPublic,
        properties,
        storeProperty,
        udpateStatus,
        getProperty,
        property,
        update,
        errors,
        _delete
    }
}