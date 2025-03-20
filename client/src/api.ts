import axios from 'axios';

const API_URL = 'http://localhost:5000/api';

export const fetchProjects = async () => {
  const response = await axios.get(`${API_URL}/projects`);
  return response.data;
};

export const fetchAbout = async () => {
  const response = await axios.get(`${API_URL}/about`);
  return response.data;
};

export const submitContact = async (data: any) => {
  const response = await axios.post(`${API_URL}/contact`, data);
  return response.data;
};
