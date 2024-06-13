import React from 'react';
import ReactDOM from 'react-dom';

// Define Main as a functional component
const Main = () => (
  <>
    <h1>Hello there - world!</h1>,
  </>
);

// Get the container for your app
const container = document.getElementById('react-app');

// Check if the container exists to avoid null errors
if (container) {
  // Create a root
  const root = ReactDOM.createRoot(container);

  // Render the Main component
  root.render(<Main />);
} else {
  console.error('Failed to find the root element');
}
