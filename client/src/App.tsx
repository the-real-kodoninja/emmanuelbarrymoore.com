import React, { useEffect, useState } from 'react';
import { fetchProjects, fetchAbout } from './api';

function App() {
  const [projects, setProjects] = useState([]);
  const [about, setAbout] = useState([]);

  useEffect(() => {
    fetchProjects().then(data => setProjects(data));
    fetchAbout().then(data => setAbout(data));
  }, []);

  return (
    <div>
      {/* Header and banner as above */}
      <div className="aUto mnInr">
        <div id="tab1" className="pRjdsPy">
          {projects.map(project => (
            <div key={project.id}>{project.title}</div>
          ))}
        </div>
        <div id="tab4" className="pRjdsPy dN">
          {about.map(item => (
            <div key={item.id}>{item.bio}</div>
          ))}
        </div>
        {/* Footer as above */}
      </div>
    </div>
  );
}

export default App;