import { useState } from 'react';
import { postContact } from '../services/api';

const Contact: React.FC = () => {
  const [formData, setFormData] = useState({ name: '', email: '', message: '' });
  const [submitted, setSubmitted] = useState(false);

  const handleChange = (e: React.ChangeEvent<HTMLInputElement | HTMLTextAreaElement>) => {
    setFormData({ ...formData, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e: React.FormEvent) => {
    e.preventDefault();
    postContact(formData)
      .then(() => setSubmitted(true))
      .catch(error => console.error('Error submitting contact:', error));
  };

  if (submitted) return <div className="p-4 text-center">Thank you for your message!</div>;

  return (
    <form onSubmit={handleSubmit} className="p-4 max-w-lg mx-auto">
      <h1 className="text-2xl font-bold mb-4">Contact Me</h1>
      <div className="mb-4">
        <label className="block mb-1">Name</label>
        <input
          type="text"
          name="name"
          value={formData.name}
          onChange={handleChange}
          className="w-full border p-2 rounded"
          required
        />
      </div>
      <div className="mb-4">
        <label className="block mb-1">Email</label>
        <input
          type="email"
          name="email"
          value={formData.email}
          onChange={handleChange}
          className="w-full border p-2 rounded"
          required
        />
      </div>
      <div className="mb-4">
        <label className="block mb-1">Message</label>
        <textarea
          name="message"
          value={formData.message}
          onChange={handleChange}
          className="w-full border p-2 rounded"
          rows={4}
          required
        />
      </div>
      <button type="submit" className="bg-blue-500 text-white p-2 rounded">
        Send
      </button>
    </form>
  );
};

export default Contact;