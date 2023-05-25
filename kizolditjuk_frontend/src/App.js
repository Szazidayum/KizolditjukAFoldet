
import './App.css';
import { useEffect, useState } from 'react';
import UserService from './UserService';
import Bejegyzesek from './Bejegyzesek';

function App() {

  const [bejegyzesek, setBejegyzesek] = useState([]);
  const [osztalyok, setOsztalyok] = useState([])
  const [tevekenysegek, setTevekenysegek] = useState([])
  const [data, setData] = useState({osztaly_id: 0, tevekenyseg_id: 0})

  useEffect(() => {
    UserService.getData("osszesBejegyzes").then((data) => {
      setBejegyzesek(data);
    });
    UserService.getData("osztalyok").then((data) => {
      setOsztalyok(data);
  });
    UserService.getData("tevekenysegek").then((data) => {
    setTevekenysegek(data);
});
}, [bejegyzesek]);

function dataChange(event) {
  data[event.target.id] = parseInt(event.target.value);
  setData(data);
}

function kuld(){
  UserService.postData("bejegyzes", data)
}

  return (
    <div className="App">
      <form>
        <label className="input-group" htmlFor="osztaly_id">
          Mit tettél ma a Földért?
        </label>
        <div className="row row-cols-auto gap-4" >
        <div className="col-xs-12">
        <select className="form-control"  style={{width: "25rem", maxWidth: "100%"}} id="osztaly_id" onChange={dataChange}>
          <option defaultValue>Válassz osztályt!</option>
          {osztalyok.map((osztaly, i) => {
            return (
              <option value={osztaly.osztaly_id} key={i}>
                {osztaly.nev}
              </option>
            );
          })}
        </select>
        </div>
        <div className="col-xs-12">
        <select className="form-control"  style={{width: "25rem", maxWidth: "100%"}} id="tevekenyseg_id" onChange={dataChange}>
          <option defaultValue>Válassz tevékenységet!</option>
          {tevekenysegek.map((tevekenyseg, i) => {
            return (
              <option value={tevekenyseg.tevekenyseg_id} key={i}>
                {tevekenyseg.tevekenyseg_nev}
              </option>
            );
          })}
        </select>
        </div>
        
        <div className="col-xs-12">
        <button type="button" style={{width: "5rem", maxWidth: "100%"}} className="btn btn-primary" onClick={kuld}>
        Felvétel
      </button>
      </div>
      </div>
      </form>
      <div className="table-responsive">
        <table className="table">
          <thead className="table-thead">
            <tr>
              <th scope="col">Osztály</th>
              <th scope="col">Tevékenység</th>
              <th scope="col">Pont</th>
              <th scope="col">Státusz</th>
            </tr>
          </thead>
          <tbody>
            {bejegyzesek.map((bejegyzes, index) => {
              return (
                <Bejegyzesek
                  bejegyzes={bejegyzes}
                  key={index}
                />
              );
            })}
          </tbody>
        </table>
      </div>
    </div>
  );
}

export default App;
