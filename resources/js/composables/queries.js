import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function useQueries() {
    const queries = ref([]);
    const errors = ref([]);
    const query = ref({});
    

    const { errorAlert } = useService();
    const getQueries = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/queries/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            queries.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    // const storeProperty = async(data) => {

    //     await axiosWrapper.post(`/admin/properties`, data);
    // }
    // const udpateStatus = async(id) => {
    //     await axiosWrapper.put(`/admin/properties/update/status`, { id })
    // }

    // const update = async(id, data) => {
    //     await axiosWrapper.put(`/admin/properties/update/${id}`, data)
    // }
    const getQuery = async(id) => {
        await axiosWrapper.get(`/admin/queries/${id}`).then((response) => {
            query.value = response.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    // const getQueriesPublic = async() => {
    //     await axiosWrapper.get(`/properties`).then((response) => {
    //         properties.value = response.data.data
    //     }).catch((e) => {
    //         errorAlert(e.message);
    //     })
    // }
    
    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/properties/delete/${id}`);
    }
    return {
        getQueries,
        // getPropertiesPublic,
        queries,
        // storeProperty,
        // udpateStatus,
        getQuery,
        query,
        // _delete
    }
}