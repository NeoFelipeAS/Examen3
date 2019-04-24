using Examen3.DAO;
using Examen3.modelos;
using System;
using System.Net;
using System.Collections.Generic;
using System.Linq;
using System.Runtime.Serialization;
using System.ServiceModel;
using System.ServiceModel.Web;
using System.Text;

namespace Examen3
{
    public class Soporte : ISoporte
    {
        private SoporteDAO soporteDAO = new SoporteDAO();

        public List<Tiquete> ListarTiquetes()
        {
            return soporteDAO.ListarTiquetes();
        }

        public Tiquete ObtenerTiquete(string id)
        {
            return soporteDAO.ObtenerTiquete(Convert.ToInt32(id));
        }

        public Tiquete CrearTiquete(Tiquete tiqueteACrear)
        {
            Tiquete Existente = soporteDAO.ObtenerTiquete(tiqueteACrear.Id);
            return soporteDAO.CrearTiquete(tiqueteACrear);
        }

        public List<TiqueteNota> ListarNotas(string id)
        {
            return soporteDAO.ListarNotas(Convert.ToInt32(id));
        }

        public TiqueteNota CrearNota(TiqueteNota notaACrear)
        {
            TiqueteNota Existente = soporteDAO.ObtenerNota(notaACrear.Id);
            return soporteDAO.CrearNota(notaACrear);
        }

        public void Options()
        {
            WebOperationContext.Current.OutgoingResponse.Headers.Add("X-MyHeader", "value");
            WebOperationContext.Current.OutgoingResponse.Headers.Add("Public", "OPTIONS,POST,GET,PUT,DELETE");
        }
    }
}
