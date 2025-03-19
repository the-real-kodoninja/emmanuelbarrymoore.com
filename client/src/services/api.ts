import axios from 'axios';

const api = axios.create({
  baseURL: 'http://localhost:5000/api',
});

export const getProjects = () => api.get<Project[]>('/projects');
export const getAbout = () => api.get<About[]>('/about');
export const postContact = (data: { name: string; email: string; message: string }) =>
  api.post('/contact', data);