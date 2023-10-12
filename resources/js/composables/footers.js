import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function useFooters() {
    const footers = ref([]);
    const errors = ref([]);
    const footer = ref({});
    const { errorAlert } = useService();
    const getFooters = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/footers/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            footers.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const storeFooter = async(data) => {

        await axiosWrapper.post(`/admin/footers`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/footers/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/footers/update/${id}`, data)
    }
    const getFooter = async(id) => {
        await axiosWrapper.get(`/admin/footers/${id}`).then((response) => {
            footer.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    // const getFooterssPublic = async() => {
    //     await axiosWrapper.get(`/footers`).then((response) => {
    //         footers.value = response.data.data
    //     }).catch((e) => {
    //         errorAlert(e.message);
    //     })
    // }
    
    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/footers/delete/${id}`);
    }
    return {
        getFooters,
        //getFooterssPublic,
        footers,
        storeFooter,
        udpateStatus,
        getFooter,
        footer,
        update,
        errors,
        _delete
    }
}