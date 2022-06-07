import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

export const List = () => {
  const [produks, setProduks] = useState(null);

  const fetchData = () => {
    axios.get(`http://localhost:8000/api/produk`)
      .then(res => {
        const result = res.data;
        setProduks(result.data);
      })
  }

  useEffect(() => {
    fetchData();
  }, []);

  const renderProduks = () => {
    if(!produks) {
      return (
        <tr>
          <td colSpan="6">
            Loading produk...
          </td>
        </tr>
      )
    }
    if(produks.length === 0) {
      return (
        <tr>
          <td colSpan="6">
            Produk tidak tersedia.
          </td>
        </tr>
      )
    }

    return produks.map((produk, index) => (
      <tr key={index}>
        <td>{index+1}</td>
        <td>{produk.nama}</td>
        <td>{produk.keterangan}</td>
        <td>{produk.harga}</td>
        <td>{produk.persediaan}</td>
        <td>
          <Link className='btn btn-primary' to={`/edit/${produk.id}`}>
            Edit
          </Link>{" "}
          <button type='button' className='btn btn-danger' onClick={() => {
            axios.delete(`http://localhost:8000/api/produk/${produk.id}`)
            .then(fetchData)
            .catch(err => {
              alert("ERROR");
            })
          }}>
            Delete
          </button>
        </td>
      </tr>
      ))
  }

  return (
    <div className='container' style={{marginTop: "40px"}}>
      <div className="card">
        <h5 className="card-header">
          List
        </h5>
        <div className="card-body">
          <table className="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Harga</th>
                <th scope="col">Persediaan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              {renderProduks()}
            </tbody>
          </table>
          <Link className='btn btn-success' to={'/create'}>Add</Link>
        </div>
      </div>
    </div>
  )
}
