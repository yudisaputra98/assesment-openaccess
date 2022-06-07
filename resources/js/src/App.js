import React from 'react';
import ReactDOM from 'react-dom';
import {
    BrowserRouter,
    Routes,
    Route,
  } from "react-router-dom";
import { Create } from './components/Produk/Create';
import { Edit } from './components/Produk/Edit';
import { List } from './components/Produk/List';

function App() {
    return (
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<List />} />
                <Route path="/create" element={<Create />} />
                <Route path="/edit/:id" element={<Edit />} />
            </Routes>
        </BrowserRouter>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}
