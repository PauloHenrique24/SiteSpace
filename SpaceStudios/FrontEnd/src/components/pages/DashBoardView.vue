<template>
    <div class="dashboard">
      <aside class="sidebar" :class="{ 'sidebar-collapsed': isCollapsed }">
        <div class="sidebar-brand">
          <h1>Dashboard</h1>
        </div>
        <nav class="nav-links">
          <a href="#" class="nav-link" :class="{ active: activeTab === 'cursos' }" @click.prevent="setActive('cursos')">
            <svg class="icon" viewBox="0 0 24 24"><path d="M3 9.5L12 3l9 6.5V21a1 1 0 01-1 1h-5v-6H9v6H4a1 1 0 01-1-1V9.5z" fill="currentColor"/></svg>
            <span v-if="!isCollapsed">Cursos</span>
          </a>
          <a href="#" class="nav-link" :class="{ active: activeTab === 'news' }" @click.prevent="setActive('news')">
            <svg class="icon" viewBox="0 0 24 24"><path d="M4 18h4v-8H4v8zm6 0h4v-12h-4v12zm6 0h4v-4h-4v4z" fill="currentColor"/></svg>
            <span v-if="!isCollapsed">News</span>
          </a>
          <a href="#" class="nav-link" :class="{ active: activeTab === 'admins' }" @click.prevent="setActive('admins')">
            <svg class="icon" viewBox="0 0 24 24"><path d="M4 18h4v-8H4v8zm6 0h4v-12h-4v12zm6 0h4v-4h-4v4z" fill="currentColor"/></svg>
            <span v-if="!isCollapsed">Admins</span>
          </a>
          <a href="#" class="nav-link" :class="{ active: activeTab === 'perfil' }" @click.prevent="setActive('perfil')">
            <svg class="icon" viewBox="0 0 24 24"><path d="M12 15.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7zM19.43 12.98a7.074 7.074 0 000-1.95l2.11-1.65a.5.5 0 00.12-.62l-2-3.46a.5.5 0 00-.6-.23L16.5 6.37a7.06 7.06 0 00-1.66-.97l-.32-2.54a.5.5 0 00-.5-.43h-4a.5.5 0 00-.5.43l-.32 2.54a7.057 7.057 0 00-1.66.97L4.94 6.12a.5.5 0 00-.6.23l-2 3.46a.5.5 0 00.12.62l2.11 1.65a7.07 7.07 0 000 1.95l-2.11 1.65a.5.5 0 00-.12.62l2 3.46a.5.5 0 00.6.23l2.68-1.5a7.06 7.06 0 001.66.97l.32 2.54a.5.5 0 00.5.43h4a.5.5 0 00.5-.43l.32-2.54a7.06 7.06 0 001.66-.97l2.68 1.5a.5.5 0 00.6-.23l2-3.46a.5.5 0 00-.12-.62l-2.11-1.65z" fill="currentColor"/></svg>
            <span v-if="!isCollapsed">Perfil</span>
          </a>

          <a href="/" class="nav-link">
            <span v-if="!isCollapsed">Voltar</span>
          </a>
        </nav>
      </aside>
  
      <main class="main-content">
        <header class="header">
          <h2>{{ activeTabTitle }}</h2>
          <div class="header-right">
            <div class="profile">
              <img class="avatar" src="/src/assets/img/IconeSpaceStudios.png" alt="User Avatar" />
              <span class="username">{{ auth.fullName }}</span>
            </div>
          </div>
        </header>
  
        <section v-if="activeTab === 'cursos'" class="dashboard-cards">
          <div class="card">
            <h3>Users</h3>
            <p class="number">{{ stats.users }}</p>
            <p class="desc">Active users this month</p>
          </div>
          <div class="card">
            <h3>Revenue</h3>
            <p class="number">${{ stats.revenue.toLocaleString() }}</p>
            <p class="desc">Total earnings this month</p>
          </div>
          <div class="card">
            <h3>Performance</h3>
            <div class="progress-bar">
              <div class="progress" :style="{ width: stats.performance + '%' }"></div>
            </div>
            <p class="desc">{{ stats.performance }}% of target</p>
          </div>
        </section>
  
        <section v-if="activeTab === 'news'" class="analytics-section">
          <h3>Traffic Sources</h3>
          <ul class="traffic-list">
            <li v-for="(source, index) in trafficSources" :key="index">
              <span>{{ source.name }}</span>
              <div class="traffic-bar">
                <div class="filled-bar" :style="{ width: source.percent + '%' }"></div>
              </div>
              <span>{{ source.percent }}%</span>
            </li>
          </ul>
        </section>

        <section v-if="activeTab === 'admins'" class="analytics-section">
          <h3>Administradores</h3>
          <ul class="traffic-list">
            <li v-for="(source, index) in trafficSources" :key="index">
            </li>
          </ul>
        </section>
  
        <section v-if="activeTab === 'perfil'" class="settings-section">
          <h3>Perfil</h3>
          <form @submit.prevent="saveSettings" class="settings-form">
            <label>
              Full name
              <input type="text" v-model="auth.FirstName" />
              <input type="text" v-model="auth.LastName" />
            </label>
            <label>
              Email
              <input type="text" v-model="auth.Email"/>
            </label>
            <label>
              Dark Mode
              <input type="checkbox" v-model="settings.darkMode" />
            </label>
            <button type="submit">Save</button>
          </form>
        </section>
      </main>
    </div>
  </template>
  
  <script>
  import { ref, computed } from 'vue'
  import {useAuth} from '@/stores/auth.js';
  
  export default {
    name: 'Dashboard',
    setup() {
      const isCollapsed = ref(false)
      const activeTab = ref('cursos')
      const notifications = ref(5)
  
      const stats = ref({
        users: 12458,
        revenue: 73200,
        performance: 75
      })

      const auth = useAuth();
  
      const trafficSources = ref([
        { name: 'Direct', percent: 40 },
        { name: 'Referral', percent: 25 },
        { name: 'Social Media', percent: 20 },
        { name: 'Organic Search', percent: 15 }
      ])
  
      const settings = ref({
        username: auth.fullName,
        emailNotifications: true,
        darkMode: false
      })
  
      const toggleSidebar = () => {
        isCollapsed.value = !isCollapsed.value
      }
  
      const setActive = (tab) => {
        activeTab.value = tab
      }
  
      const activeTabTitle = computed(() => {
        switch (activeTab.value) {
          case 'cursos': return 'Cursos'
          case 'news': return 'News'
          case 'perfil': return 'Perfil'
          default: return ''
        }
      })
  
      const saveSettings = () => {
        alert('Settings saved successfully!')
        // Here you could also emit an event or handle real saving logic
      }
  
      return {
        isCollapsed,
        activeTab,
        notifications,
        stats,
        trafficSources,
        settings,
        toggleSidebar,
        setActive,
        activeTabTitle,
        saveSettings,
        auth,
      }
    }
  }
  </script>
  
  <style scoped>
  .dashboard {
    display: flex;
    height: 100vh;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #333;
    background-color: #f4f7fc;
    overflow: hidden;
  }
  
  /* Sidebar styles */
  .sidebar {
    background-color: #1e293b;
    color: white;
    width: 220px;
    display: flex;
    flex-direction: column;
    transition: width 0.3s ease;
    overflow: hidden;
  }
  .sidebar-collapsed {
    width: 64px;
  }
  .sidebar-brand {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem;
    background-color: #334155;
    font-weight: 700;
    font-size: 1.5rem;
  }
  .collapse-btn {
    background: none;
    border: none;
    color: white;
    font-size: 1.2rem;
    cursor: pointer;
    transition: transform 0.3s ease;
    user-select: none;
  }
  .nav-links {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    margin-top: 1rem;
  }
  .nav-link {
    display: flex;
    align-items: center;
    padding: 1rem;
    color: #cbd5e1;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
    cursor: pointer;
    user-select: none;
  }
  .nav-link:hover,
  .nav-link.active {
    background-color: #3b82f6;
    color: white;
  }
  .nav-link .icon {
    width: 24px;
    height: 24px;
    margin-right: 1rem;
    flex-shrink: 0;
  }
  .sidebar-collapsed .nav-link span {
    display: none;
  }
  
  /* Main content area */
  .main-content {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    padding: 1.5rem 2rem;
    overflow-y: auto;
  }
  .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #cbd5e1;
    padding-bottom: 1rem;
    margin-bottom: 1.5rem;
  }
  .header h2 {
    font-weight: 700;
    font-size: 1.75rem;
    color: #1e293b;
  }
  .header-right {
    display: flex;
    align-items: center;
  }
  .notification-btn {
    position: relative;
    background: none;
    border: none;
    cursor: pointer;
    margin-right: 1.5rem;
    color: #475569;
  }
  .notification-btn .icon {
    width: 24px;
    height: 24px;
  }
  .notif-count {
    position: absolute;
    top: -6px;
    right: -6px;
    background-color: #ef4444;
    color: white;
    font-size: 0.7rem;
    font-weight: 700;
    border-radius: 50%;
    padding: 2px 6px;
    min-width: 18px;
    text-align: center;
    user-select: none;
  }
  .profile {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    color: #334155;
    font-weight: 600;
  }
  .avatar {
    width: 40px;
    height: 40px;
    border-radius: 9999px;
    object-fit: cover;
    box-shadow: 0 0 5px rgba(0,0,0,0.1);
  }
  
  /* Cards grid */
  .dashboard-cards {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(220px,1fr));
    gap: 1.5rem;
  }
  .card {
    background: white;
    border-radius: 10px;
    padding: 1.5rem;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    transition: box-shadow 0.3s ease;
  }
  .card:hover {
    box-shadow: 0 4px 14px rgba(59,130,246,0.5);
  }
  .card h3 {
    margin-bottom: 0.5rem;
    color: #334155;
  }
  .number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #3b82f6; /* blue */
    margin-bottom: 0.25rem;
  }
  .desc {
    font-size: 0.9rem;
    color: #64748b;
  }
  
  /* Progress bar */
  .progress-bar {
    width: 100%;
    height: 14px;
    background-color: #e2e8f0;
    border-radius: 7px;
    overflow: hidden;
    margin-top: 8px;
  }
  .progress {
    height: 100%;
    background-color: #3b82f6;
    border-radius: 7px 0 0 7px;
    transition: width 0.5s ease;
  }
  
  /* Analytics Section */
  .analytics-section {
    background: white;
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }
  .analytics-section h3 {
    margin-bottom: 1rem;
    color: #334155;
  }
  .traffic-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  .traffic-list li {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 0.75rem;
    font-weight: 600;
    color: #475569;
  }
  .traffic-bar {
    flex-grow: 1;
    height: 14px;
    background: #e2e8f0;
    border-radius: 7px;
    margin: 0 10px;
    overflow: hidden;
  }
  .filled-bar {
    height: 100%;
    background-color: #3b82f6;
    border-radius: 7px 0 0 7px;
    transition: width 0.5s ease;
  }
  
  /* Settings section */
  .settings-section {
    background: white;
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }
  .settings-section h3 {
    margin-bottom: 1rem;
    color: #334155;
  }
  .settings-form {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
    max-width: 300px;
  }
  .settings-form label {
    display: flex;
    flex-direction: column;
    font-weight: 600;
    color: #475569;
    font-size: 0.9rem;
  }
  .settings-form input[type="text"] {
    padding: 0.5rem 0.75rem;
    border-radius: 6px;
    border: 1px solid #cbd5e1;
    margin-top: 0.25rem;
    font-size: 1rem;
    transition: border-color 0.3s ease;
  }
  .settings-form input[type="text"]:focus {
    border-color: #3b82f6;
    outline: none;
  }
  .settings-form input[type="checkbox"] {
    margin-top: 0.5rem;
    width: 18px;
    height: 18px;
    accent-color: #3b82f6;
    cursor: pointer;
  }
  .settings-form button {
    align-self: flex-start;
    background-color: #3b82f6;
    color: white;
    border: none;
    padding: 0.65rem 1.5rem;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 700;
    transition: background-color 0.3s ease;
  }
  .settings-form button:hover {
    background-color: #2563eb;
  }
  
  /* Responsive */
  @media (max-width: 900px) {
    .dashboard {
      flex-direction: column;
    }
    .sidebar {
      width: 100%;
      flex-direction: row;
      overflow-x: auto;
    }
    .sidebar-collapsed {
      width: 100%;
    }
    .sidebar-brand {
      flex: 1 0 auto;
    }
    .nav-links {
      flex-direction: row;
      margin-top: 0;
    }
    .nav-link {
      padding: 0.5rem 1rem;
    }
    .nav-link .icon {
      margin-right: 0;
    }
    .nav-link span {
      display: none;
    }
    .sidebar-collapsed .nav-link span {
      display: none;
    }
    .main-content {
      padding: 1rem;
    }
    .dashboard-cards {
      grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    }
  }
  </style>