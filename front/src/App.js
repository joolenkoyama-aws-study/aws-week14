import React, { useState, useEffect } from "react";

function App() {
  const [users, setUsers] = useState([]);
  const apiUrl = process.env.REACT_APP_API_URL;

  useEffect(() => {
    // fetch(`${apiUrl}/dummy-data`)
      fetch(`${apiUrl}/users`)
      .then((response) => response.json())
      .then((data) => setUsers(data));
  }, [apiUrl]);

  return (
    <div>
      {/*<h1>User List</h1>*/}
      <h1>User List GitHub Actions Test v8</h1>
      <ul>
        {users.map((user) => (
          <li>
            <p>{user.name}</p>
            <p>{user.email}</p>
            <p>{user.age}</p>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default App;
