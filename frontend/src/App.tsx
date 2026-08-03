import React, { Suspense } from 'react'
import { Routes, Route, Navigate } from 'react-router-dom'
import Home from './pages/Home'
import SignIn from './pages/Auth/SignIn'
import Dashboard from './pages/Dashboard'
import Header from './components/layout/Header'

function App() {
  const isAuthenticated = false // placeholder, will be replaced by auth hook

  return (
    <div className="min-h-screen">
      <Header />
      <main className="p-4">
        <Suspense fallback={<div>Loading...</div>}>
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/signin" element={<SignIn />} />
            <Route
              path="/dashboard"
              element={isAuthenticated ? <Dashboard /> : <Navigate to="/signin" replace />}
            />
            <Route path="*" element={<div className="py-20 text-center">404 — Page not found</div>} />
          </Routes>
        </Suspense>
      </main>
    </div>
  )
}

export default App
