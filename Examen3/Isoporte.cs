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

        [WebInvoke(Method = "OPTIONS", UriTemplate = "*")]
        void Options();
    }
}
