import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function usePropertyTypes() {
    const propertyTypes = ref([]);
    const errors = ref([]);
    const propertyType = ref({});
    

    const { errorAlert } = useService();
    const getPropertyTypes = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/property-types/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            propertyTypes.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const store = async(data) => {
        await axiosWrapper.post(`/admin/property-types`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/property-types/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/property-types/update/${id}`, data)
    }
    const getPropertyType = async(id) => {
        await axiosWrapper.get(`/admin/property-types/${id}`).then((response) => {
            propertyType.value = response.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getPropertyTypesPublic = async() => {
        await axiosWrapper.get(`/property-types/select`).then((response) => {
            propertyTypes.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    
    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/property-types/delete/${id}`);
    }
    return {
        getPropertyTypes,
        getPropertyTypesPublic,
        propertyTypes,
        store,
        udpateStatus,
        getPropertyType,
        propertyType,
        update,
        errors,
        _delete
    }
}