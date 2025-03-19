import { useEffect, useState } from 'react';
import { getProjects } from '../services/api';
import { Project } from '../types/Project';

const ProjectList: React.FC = () => {
  const [projects, setProjects] = useState<Project[]>([]);

  useEffect(() => {
    getProjects()
      .then(response => setProjects(response.data))
      .catch(error => console.error('Error fetching projects:', error));
  }, []);

  return (
    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-4">
      {projects.map(project => (
        <div key={project.id} className="border rounded-lg p-4">
          <img src={project.imageUrl} alt={project.title} className="w-full h-48 object-cover" />
          <h2 className="text-xl font-bold">{project.title}</h2>
          <p>{project.description}</p>
          <a href={project.projectUrl} className="text-blue-500">View Project</a>
        </div>
      ))}
    </div>
  );
};

export default ProjectList;