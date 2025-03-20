import React, { useEffect, useState } from 'react';
import { AppBar, Toolbar, Typography, Button, Container, Box, Grid, IconButton, Avatar } from '@mui/material';
import { Search as SearchIcon, Notifications as NotificationsIcon, Login as LoginIcon } from '@mui/icons-material';
import { fetchProjects, fetchAbout } from './api';

function App() {
  const [projects, setProjects] = useState([]);
  const [about, setAbout] = useState([]);
  useEffect(() => {
    fetchProjects().then(data => setProjects(data)).catch(() => setProjects([]));
    fetchAbout().then(data => setAbout(data)).catch(() => setAbout([]));
  }, []);
  return (
    <div>
      <AppBar position="static" color="default">
        <Toolbar>
          <Typography variant="h6" sx={{ flexGrow: 1 }}>EBM</Typography>
          {/* Rest of your MUI layout */}
        </Toolbar>
      </AppBar>
      {/* Banner, User Info, Nav, Footer */}
    </div>
  );
}

export default App;
