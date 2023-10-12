import { ref } from 'vue'
import { axiosWrapper } from '../helpers/index';
import { useRouter } from 'vue-router';
import useService from '../services';

export default function useBlogs() {
    const blogs = ref([]);
    const errors = ref([]);
    const blog = ref({});
    

    const { errorAlert } = useService();
    const getBlogs = async(pageNo, limit, orderBy, order, data) => {
        await axiosWrapper.get(`/admin/blogs/ajax?length=${limit}&start=${pageNo}&orderBy=${orderBy}&order=${order}`, data).then((response) => {
            blogs.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }

    const storeBlog = async(data) => {

        await axiosWrapper.post(`/admin/blogs`, data);
    }
    const udpateStatus = async(id) => {
        await axiosWrapper.put(`/admin/blogs/update/status`, { id })
    }

    const update = async(id, data) => {
        await axiosWrapper.put(`/admin/blogs/update/${id}`, data)
    }
    const getBlog = async(id) => {
        await axiosWrapper.get(`/admin/blogs/${id}`).then((response) => {
            blog.value = response.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    const getBlogsPublic = async() => {
        await axiosWrapper.get(`/blogs`).then((response) => {
            blogs.value = response.data.data
        }).catch((e) => {
            errorAlert(e.message);
        })
    }
    
    const _delete  =async(id) => {
        await axiosWrapper.destroy(`/admin/blogs/delete/${id}`);
    }
    return {
        getBlogs,
        getBlogsPublic,
        blogs,
        storeBlog,
        udpateStatus,
        getBlog,
        blog,
        update,
        errors,
        _delete
    }
}