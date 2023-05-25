function Bejegyzesek(props){

    return(
        <tr>
      <td>{props.bejegyzes.osztaly}</td>
      <td>{props.bejegyzes.tevekenyseg_nev}</td>
      <td>{props.bejegyzes.pontszam}</td>
      <td>{props.bejegyzes.allapot}</td>
    </tr>
    )
}

export default Bejegyzesek;