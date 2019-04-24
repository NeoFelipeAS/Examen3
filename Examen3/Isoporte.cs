using System;
using Examen3.modelos;
using System.Collections.Generic;
using System.ServiceModel;
using System.ServiceModel.Web;


namespace Examen3
{
    [ServiceContract]
    public interface ISoporte
    {
        [OperationContract]
        [WebInvoke(Method = "GET", UriTemplate = "tiquetes", ResponseFormat = WebMessageFormat.Json)]
        List<Tiquete> ListarTiquetes();

        [OperationContract]
        [WebInvoke(Method = "GET", UriTemplate = "tiquetes/{id}", ResponseFormat = WebMessageFormat.Json)]
        Tiquete ObtenerTiquete(string id);

        [OperationContract]
        [WebInvoke(Method = "POST", UriTemplate = "tiquetes", ResponseFormat = WebMessageFormat.Json)]
        Tiquete CrearTiquete(Tiquete tiqueteACrear);

        [OperationContract]
        [WebInvoke(Method = "GET", UriTemplate = "notas/{id}", ResponseFormat = WebMessageFormat.Json)]
        List<TiqueteNota> ListarNotas(string id);

        [OperationContract]
        [WebInvoke(Method = "POST", UriTemplate = "notas", ResponseFormat = WebMessageFormat.Json)]
        TiqueteNota CrearNota(TiqueteNota notaACrear);

        [WebInvoke(Method = "OPTIONS", UriTemplate = "*")]
        void Options();
    }
}
