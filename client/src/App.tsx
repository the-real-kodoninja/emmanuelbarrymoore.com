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
      {/* Header */}
      <AppBar position="static" color="default">
        <Toolbar>
          <Typography variant="h6" sx={{ flexGrow: 1 }}>EBM</Typography>
          <Box sx={{ display: 'flex', alignItems: 'center', mr: 2 }}>
            <SearchIcon />
            <input
              type="text"
              placeholder="Search Emmanuel Moore"
              style={{ marginLeft: 8, padding: 4, borderRadius: 4, border: '1px solid #ccc' }}
              onKeyUp={(e) => console.log(e.target.value)}
            />
            <Button variant="contained" color="primary" sx={{ ml: 1 }}>Search</Button>
          </Box>
          <IconButton onClick={() => console.log('Notifications')}>
            <NotificationsIcon />
            <Typography variant="caption" sx={{ position: 'absolute', top: 0, right: 0, bgcolor: 'red', color: 'white', borderRadius: '50%', px: 1 }}>6</Typography>
          </IconButton>
          <Button startIcon={<LoginIcon />} onClick={() => console.log('Login')}>Login</Button>
        </Toolbar>
      </AppBar>

      {/* Banner */}
      <Box sx={{ width: '100%', mt: 2 }}>
        <img
          src="/img/bnr/Screenshot%20from%202015-10-14%2020_44_35a.png"
          alt="Banner"
          style={{ width: '100%', height: '200px', objectFit: 'cover', cursor: 'pointer' }}
          onClick={() => console.log('Banner clicked')}
        />
      </Box>

      {/* User Info */}
      <Container maxWidth="lg" sx={{ mt: 4, bgcolor: 'white', p: 4, borderRadius: 2, boxShadow: 1 }}>
        <Grid container spacing={2} alignItems="flex-start">
          <Grid item>
            <Avatar
              src="/img/temp/20160517_082019.jpg"
              alt="Emmanuel"
              sx={{ width: 100, height: 100, cursor: 'pointer' }}
              onClick={() => console.log('Profile clicked')}
            />
          </Grid>
          <Grid item xs>
            <Typography variant="h4">Emmanuel Barry Moore</Typography>
            <Typography variant="body1" color="textSecondary"><i className="fi fi-torso-business"></i> Developer</Typography>
            <Typography variant="body1" color="textSecondary"><i className="fi fi-marker"></i> Costa Mesa, CA</Typography>
            <Typography variant="body1" color="textSecondary"><i className="fi fi-trophy"></i> Johnson & Wales University</Typography>
            <Typography variant="body2" sx={{ mt: 1 }}><i className="fi fi-torso"></i> Full-Stack Front/Back-End Developer, Programmer, UI/UX Designer, Software Developer/Engineer.</Typography>
            <Typography variant="body2" color="error"><i className="fi fi-info"></i> Looking for employment in Los Angeles, CA</Typography>
          </Grid>
          <Grid item>
            <Button variant="contained" color="primary" onClick={() => console.log('Reach Me')}>Reach Me</Button>
          </Grid>
        </Grid>
      </Container>

      {/* Navigation and Content */}
      <Container maxWidth="lg" sx={{ mt: 4 }}>
        <Box sx={{ bgcolor: '#f5f5f5', p: 2, borderRadius: 2, display: 'flex', justifyContent: 'space-between' }}>
          <Box>
            <Button href="#projects" color="primary">Projects</Button>
            <Button href="#code">Code</Button>
            <Button href="#wireframes">Wireframes</Button>
            <Button href="#about">About</Button>
          </Box>
          <Box sx={{ display: 'flex', gap: 1 }}>
            <IconButton href="https://www.facebook.com/Emmanuel.Moore" target="_blank"><i className="fi fi-social-facebook"></i></IconButton>
            <IconButton href="https://twitter.com/EmmanuelB_Moore" target="_blank"><i className="fi fi-social-twitter"></i></IconButton>
            <IconButton href="https://plus.google.com/+Aviyon" target="_blank"><i className="fi fi-social-google-plus"></i></IconButton>
            <IconButton href="http://www.youtube.com/aviyon365" target="_blank"><i className="fi fi-social-youtube"></i></IconButton>
            <IconButton href="http://www.linkedin.com/in/emmanuelmoore" target="_blank"><i className="fi fi-social-linkedin"></i></IconButton>
            <IconButton href="https://github.com/Emmanuel-Moore" target="_blank"><i className="fi fi-social-github"></i></IconButton>
          </Box>
        </Box>

        <Box sx={{ mt: 2 }}>
          <Box id="projects" sx={{ p: 2, bgcolor: 'white', borderRadius: 2, boxShadow: 1 }}>
            <Typography variant="h5">Projects</Typography>
            {projects.length ? projects.map(p => <Typography key={p.id}>{p.title}</Typography>) : <Typography>No projects yet.</Typography>}
          </Box>
          <Box id="about" sx={{ p: 2, bgcolor: 'white', borderRadius: 2, boxShadow: 1, mt: 2, display: 'none' }}>
            <Typography variant="h5">About</Typography>
            {about.length ? about.map(a => <Typography key={a.id}>{a.bio}</Typography>) : <Typography>No about info yet.</Typography>}
          </Box>
        </Box>
      </Container>

      {/* Footer */}
      <Box sx={{ bgcolor: '#333', color: 'white', p: 2, mt: 4 }}>
        <Container maxWidth="lg" sx={{ display: 'flex', justifyContent: 'space-between', alignItems: 'center' }}>
          <Box sx={{ display: 'flex', gap: 1 }}>
            <IconButton href="https://www.facebook.com/Emmanuel.Moore" target="_blank" sx={{ color: 'white' }}><i className="fi fi-social-facebook"></i></IconButton>
            <IconButton href="https://twitter.com/EmmanuelB_Moore" target="_blank" sx={{ color: 'white' }}><i className="fi fi-social-twitter"></i></IconButton>
            <IconButton href="https://plus.google.com/+Aviyon" target="_blank" sx={{ color: 'white' }}><i className="fi fi-social-google-plus"></i></IconButton>
            <IconButton href="http://www.youtube.com/aviyon365" target="_blank" sx={{ color: 'white' }}><i className="fi fi-social-youtube"></i></IconButton>
            <IconButton href="http://www.linkedin.com/in/emmanuelmoore" target="_blank" sx={{ color: 'white' }}><i className="fi fi-social-linkedin"></i></IconButton>
            <IconButton href="https://github.com/Emmanuel-Moore" target="_blank" sx={{ color: 'white' }}><i className="fi fi-social-github"></i></IconButton>
          </Box>
          <Typography variant="body2">
            emmanuelmoore.tech Created by <a href="https://www.facebook.com/Emmanuel.Moore" target="_blank" style={{ color: '#fff', textDecoration: 'underline' }}>Emmanuel Moore</a><br />
            © emmanuelmoore.tech 2025 <b>Version: 2.0</b>
          </Typography>
        </Container>
      </Box>
    </div>
  );
}

export default App;
