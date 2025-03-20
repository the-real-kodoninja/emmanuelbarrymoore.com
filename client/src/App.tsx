import React, { useEffect, useState } from 'react';
import { fetchProjects, fetchAbout } from './api';

function App() {
  const [projects, setProjects] = useState([]);
  const [about, setAbout] = useState([]);

  useEffect(() => {
    fetchProjects().then(data => setProjects(data)).catch(() => setProjects([]));
    fetchAbout().then(data => setAbout(data)).catch(() => setAbout([]));
  }, []);

  return (
    <div className="min-h-screen bg-gray-100 font-sans">
      {/* Header */}
      <header className="bg-white shadow-md p-4">
        <div className="max-w-6xl mx-auto flex justify-between items-center">
          <div className="flex items-center space-x-4">
            <span className="text-xl font-bold">EBM</span>
            <form className="flex items-center space-x-2">
              <i className="fi fi-magnifying-glass text-gray-500"></i>
              <input
                type="text"
                className="border rounded p-2"
                placeholder="Search Emmanuel Moore"
                onKeyUp={(e) => console.log(e.target.value)}
              />
              <button type="submit" className="bg-blue-500 text-white p-2 rounded">Search</button>
            </form>
          </div>
          <div className="flex space-x-4">
            <div className="flex items-center cursor-pointer" onClick={() => console.log('Notifications')}>
              <span className="bg-red-500 text-white rounded-full px-2">6</span>
              <i className="fi fi-alert ml-1 text-red-500"></i>
            </div>
            <div className="flex items-center cursor-pointer" onClick={() => console.log('Login')}>
              <span className="text-blue-500">login</span>
              <i className="fi fi-torsos-all ml-1 text-blue-500"></i>
            </div>
          </div>
        </div>
      </header>

      {/* Banner */}
      <div className="w-full">
        <img
          className="w-full h-64 object-cover cursor-pointer"
          src="/img/bnr/Screenshot%20from%202015-10-14%2020_44_35a.png"
          alt="Banner"
          onClick={() => console.log('Banner clicked')}
        />
      </div>

      {/* User Info */}
      <div className="bg-white p-6 max-w-6xl mx-auto mt-4 rounded shadow">
        <div className="flex items-start space-x-6">
          <img
            className="w-32 h-32 rounded-full cursor-pointer"
            src="/img/temp/20160517_082019.jpg"
            alt="Emmanuel"
            onClick={() => console.log('Profile clicked')}
          />
          <div>
            <h1 className="text-3xl font-bold">Emmanuel Barry Moore</h1>
            <p className="text-gray-600 flex items-center"><i className="fi fi-torso-business mr-1"></i> Developer</p>
            <p className="text-gray-600 flex items-center"><i className="fi fi-marker mr-1"></i> Costa Mesa, CA</p>
            <p className="text-gray-600 flex items-center"><i className="fi fi-trophy mr-1"></i> Johnson & Wales University</p>
            <p className="mt-2"><i className="fi fi-torso mr-1"></i> Full-Stack Front/Back-End Developer, Programmer, UI/UX Designer, Software Developer/Engineer.</p>
            <p className="text-red-500"><i className="fi fi-info mr-1"></i> Looking for employment in Los Angeles, CA</p>
          </div>
          <button className="bg-blue-500 text-white px-4 py-2 rounded ml-auto" onClick={() => console.log('Reach Me')}>
            Reach Me
          </button>
        </div>
      </div>

      {/* Navigation and Content */}
      <div className="max-w-6xl mx-auto mt-4">
        <nav className="bg-gray-200 p-4 rounded flex justify-between">
          <div className="space-x-4">
            <a href="#projects" className="text-blue-500 font-semibold" onClick={() => console.log('Projects')}>Projects</a>
            <a href="#code" className="text-gray-700" onClick={() => console.log('Code')}>Code</a>
            <a href="#wireframes" className="text-gray-700" onClick={() => console.log('Wireframes')}>Wireframes</a>
            <a href="#about" className="text-gray-700" onClick={() => console.log('About')}>About</a>
          </div>
          <ul className="flex space-x-4">
            <li><a href="https://www.facebook.com/Emmanuel.Moore" target="_blank"><i className="fi fi-social-facebook text-blue-600"></i></a></li>
            <li><a href="https://twitter.com/EmmanuelB_Moore" target="_blank"><i className="fi fi-social-twitter text-blue-400"></i></a></li>
            <li><a href="https://plus.google.com/+Aviyon" target="_blank"><i className="fi fi-social-google-plus text-red-500"></i></a></li>
            <li><a href="http://www.youtube.com/aviyon365" target="_blank"><i className="fi fi-social-youtube text-red-600"></i></a></li>
            <li><a href="http://www.linkedin.com/in/emmanuelmoore" target="_blank"><i className="fi fi-social-linkedin text-blue-700"></i></a></li>
            <li><a href="https://github.com/Emmanuel-Moore" target="_blank"><i className="fi fi-social-github text-black"></i></a></li>
          </ul>
        </nav>

        {/* Placeholder Content */}
        <div className="mt-4">
          <div id="projects" className="p-4 bg-white rounded shadow">
            <h2 className="text-2xl font-bold">Projects</h2>
            {projects.length ? projects.map(p => <p key={p.id}>{p.title}</p>) : <p>No projects yet.</p>}
          </div>
          <div id="about" className="p-4 bg-white rounded shadow mt-4 hidden">
            <h2 className="text-2xl font-bold">About</h2>
            {about.length ? about.map(a => <p key={a.id}>{a.bio}</p>) : <p>No about info yet.</p>}
          </div>
        </div>
      </div>

      {/* Footer */}
      <footer className="bg-gray-800 text-white p-4 mt-8">
        <div className="max-w-6xl mx-auto flex justify-between items-center">
          <ul className="flex space-x-4">
            <li><a href="https://www.facebook.com/Emmanuel.Moore" target="_blank"><i className="fi fi-social-facebook"></i></a></li>
            <li><a href="https://twitter.com/EmmanuelB_Moore" target="_blank"><i className="fi fi-social-twitter"></i></a></li>
            <li><a href="https://plus.google.com/+Aviyon" target="_blank"><i className="fi fi-social-google-plus"></i></a></li>
            <li><a href="http://www.youtube.com/aviyon365" target="_blank"><i className="fi fi-social-youtube"></i></a></li>
            <li><a href="http://www.linkedin.com/in/emmanuelmoore" target="_blank"><i className="fi fi-social-linkedin"></i></a></li>
            <li><a href="https://github.com/Emmanuel-Moore" target="_blank"><i className="fi fi-social-github"></i></a></li>
          </ul>
          <small>
            emmanuelmoore.tech Created by <a href="https://www.facebook.com/Emmanuel.Moore" target="_blank" className="underline">Emmanuel Moore</a><br />
            © emmanuelmoore.tech 2025 <b>Version: 2.0</b>
          </small>
        </div>
      </footer>
    </div>
  );
}

export default App;
