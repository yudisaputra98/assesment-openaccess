import React, { useEffect, useState } from 'react'
import { useNavigate, useParams } from 'react-router-dom';

export const Edit = () => {
  const {id} = useParams();
  const navigate = useNavigate();
  const [loading, setLoading] = useState(false);
  const [nama, setNama] = useState('');
  const [keterangan, setKeterangan] = useState('');
  const [harga, setHarga] = useState('');
  const [persediaan, setPersediaan] = useState('');

  const onSubmit = async () => {
    axios.put(`http://localhost:8000/api/produk/${id}`, {
      nama: nama,
      keterangan: keterangan,
      harga: harga,
      persediaan: persediaan
    })
    .then(function () {
      navigate('/');
    })
    .catch(function () {
      alert('Failed to save produk');
    });
  };

  useEffect(() => {
    axios.get(`http://localhost:8000/api/produk/${id}`)
      .then(res => {
        const result = res.data;
        setNama(result.nama);
        setKeterangan(result.keterangan);
        setHarga(result.harga);
        setPersediaan(result.persediaan);
      })
  }, [])

  return (
    <div className='container' style={{marginTop: "40px"}}>
      <div className="card">
        <h5 className="card-header">
          Create
        </h5>
        <div className="card-body">
          <div className="form-group row">
            <label className="col-sm-2 col-form-label">Nama</label>
            <div className="col-sm-10">
              <input 
                type="text" 
                className="form-control" 
                placeholder="Nama"
                value={nama}
                onChange={e => setNama(e.target.value)} 
              />
            </div>
          </div>
          <div className="form-group row">
            <label className="col-sm-2 col-form-label">Keterangan</label>
            <div className="col-sm-10">
              <textarea 
                className='form-control' 
                placeholder='Keterangan'
                value={keterangan}
                onChange={e => setKeterangan(e.target.value)}
              ></textarea>
            </div>
          </div>
          <div className="form-group row">
            <label className="col-sm-2 col-form-label">Harga</label>
            <div className="col-sm-10">
              <input 
                type="number" 
                className="form-control" 
                placeholder="Harga"
                value={harga}
                onChange={e => setHarga(e.target.value)}
              />
            </div>
          </div>
          <div className="form-group row">
            <label className="col-sm-2 col-form-label">Persediaan</label>
            <div className="col-sm-10">
              <input 
                type="number" 
                className="form-control" placeholder="Persediaan"
                value={persediaan}
                onChange={e => setPersediaan(e.target.value)}
              />
            </div>
          </div>
          <div className="form-group row">
            <label className="col-sm-2 col-form-label"></label>
            <div className="col-sm-10">
              <button 
                type='button' 
                className='btn btn-primary'
                onClick={onSubmit}
                disabled={loading}
              >Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  )
}
