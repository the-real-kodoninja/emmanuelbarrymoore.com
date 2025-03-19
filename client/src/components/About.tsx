import { useEffect, useState } from 'react';
import { getAbout } from '../services/api';
import { About } from '../types/About';

const About: React.FC = () => {
  const [about, setAbout] = useState<About | null>(null);

  useEffect(() => {
    getAbout()
      .then(response => setAbout(response.data[0])) // Assuming one About entry
      .catch(error => console.error('Error fetching about:', error));
  }, []);

  if (!about) return <div>Loading...</div>;

  return (
    <div className="p-4 max-w-2xl mx-auto">
      <h1 className="text-2xl font-bold mb-4">About Me</h1>
      <p className="mb-4">{about.bio}</p>
      <h2 className="text-xl font-semibold">Skills</h2>
      <ul className="list-disc pl-5">
        {about.skills.split(',').map(skill => (
          <li key={skill.trim()}>{skill.trim()}</li>
        ))}
      </ul>
    </div>
  );
};

export default About;