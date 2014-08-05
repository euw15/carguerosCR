using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CarguerosWebServer.Models
{
    public class ContainerManager
    {
        public int idContainerManager { get; set; }
        public int containerIdContainer { get; set; }
        public bool available { get; set; }
        public String arrivalDate { get; set; }
        public int maxWeight { get; set; }
    }
}