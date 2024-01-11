# Historias de Usuario 

<br>

| Campo | Descripción |
|-------|-------------|
| **ID de Historia** | US001 |
| **Nombre de la Historia** | Registro de Acciones |
| **Descripción** | Como usuario, quiero poder registrar una nueva acción en mi aplicación web. El registro debe incluir el nombre de la acción, la fecha de compra, el precio por cada acción y la cantidad de acciones compradas. La aplicación debe calcular automáticamente el costo total de la compra con base en el precio y la cantidad ingresados. Después de completar el registro, deseo ver la acción agregada a la lista de acciones registradas. |
| **Rol del Usuario** | Usuario de la aplicación web |
| **Objetivo** | Permitir a los usuarios ingresar y gestionar sus transacciones de acciones de manera eficiente. |
| **Iteración Asignada** | No asignada (puede variar según la planificación del proyecto) |
| **Prioridad en Negocio** | Alta |
| **Riesgo en Desarrollo** | Media |
| **Puntos Estimados** | 1 hora |
| **Puntos Reales** | 1 hora 30 minutos |
| **Beneficio Comercial** | Facilita el seguimiento y gestión de las inversiones en acciones, mejorando la experiencia del usuario. |
| **Requisitos Previos** | El usuario debe tener acceso a la aplicación web y estar autenticado. |
| **Criterios de Aceptación** |  Los usuarios pueden ver una lista organizada de las acciones y su fecha de compra, precio de compra, Precio de Compra por Acción <br> - La visualización de contraseñas es clara y fácil de entender. |
| **Notas Técnicas** |  |
| **Historial de Cambios** | Fecha: 2024-01-06 <br> Autor: David Averos |

| Campo | Descripción |
|-------|-------------|
| **ID de Historia** | US002 |
| **Nombre de la Historia** | Visualización de Acciones |
| **Descripción** | Como usuario, quiero ver una lista de todas las acciones que he registrado en la aplicación. La lista debe mostrar el nombre de la acción, la fecha de compra, el precio por acción, la cantidad de acciones y el costo total de cada compra. Deseo poder ordenar la lista por diferentes criterios, como fecha de compra o nombre de la acción. |
| **Rol del Usuario** | Usuario de la aplicación web |
| **Objetivo** | Permitir a los usuarios visualizar de manera clara y organizada todas las acciones que han registrado en la aplicación. |
| **Iteración Asignada** | No asignada (puede variar según la planificación del proyecto) |
| **Prioridad en Negocio** | Alta |
| **Riesgo en Desarrollo** | Baja |
| **Puntos Estimados** | 2 horas |
| **Puntos Reales** | 2 horas 30 minutos |
| **Beneficio Comercial** | Mejora la capacidad del usuario para realizar un seguimiento efectivo de sus inversiones y tomar decisiones informadas. |
| **Requisitos Previos** | Existencia de acciones registradas en la aplicación. |
| **Criterios de Aceptación** | 
   - El usuario puede acceder a una página que muestra una lista completa de todas las acciones registradas.
   - La lista incluye el nombre de la acción, la fecha de compra, el precio por acción, la cantidad de acciones y el costo total de cada compra.
   - Se proporciona la capacidad de ordenar la lista por diferentes criterios, como fecha de compra o nombre de la acción.
| **Notas Técnicas** | La lógica de ordenamiento debe implementarse en el backend de la aplicación. |
| **Historial de Cambios** | Fecha: 2024-01-06 <br> Autor: David Averos |

| Campo | Descripción |
|-------|-------------|
| **ID de Historia** | US003 |
| **Nombre de la Historia** | Modificación de Acciones |
| **Descripción** | Como usuario, quiero poder modificar la información de una acción registrada. La modificación debe incluir la capacidad de editar el nombre de la acción, la fecha de compra, el precio por cada acción y la cantidad de acciones compradas. Después de realizar la modificación, deseo ver los cambios reflejados en la lista de acciones. |
| **Rol del Usuario** | Usuario de la aplicación web |
| **Objetivo** | Permitir a los usuarios actualizar y corregir la información de las acciones que han registrado en la aplicación. |
| **Iteración Asignada** | No asignada (puede variar según la planificación del proyecto) |
| **Prioridad en Negocio** | Media |
| **Riesgo en Desarrollo** | Baja |
| **Puntos Estimados** | 3 horas |
| **Puntos Reales** | 4 horas |
| **Beneficio Comercial** | Mejora la flexibilidad y utilidad de la aplicación al permitir a los usuarios ajustar la información de sus acciones según sea necesario. |
| **Requisitos Previos** | Existencia de acciones registradas en la aplicación. |
| **Criterios de Aceptación** | 
   - El usuario puede acceder a una función de modificación desde la lista de acciones.
   - Se proporciona un formulario prellenado con la información actual de la acción.
   - El usuario puede editar el nombre de la acción, la fecha de compra, el precio por cada acción y la cantidad de acciones.
   - Después de realizar la modificación, los cambios se reflejan inmediatamente en la lista de acciones.
| **Notas Técnicas** | La lógica de actualización de la base de datos debe implementarse en el backend de la aplicación. |
| **Historial de Cambios** | Fecha: 2024-01-06 <br> Autor: David Averos |

| Campo | Descripción |
|-------|-------------|
| **ID de Historia** | US004 |
| **Nombre de la Historia** | Eliminación de Acciones |
| **Descripción** | Como usuario, quiero poder eliminar una acción registrada en la aplicación. Al confirmar la eliminación, la acción debe ser removida de la lista de acciones. Deseo recibir una confirmación o alerta antes de la eliminación para evitar acciones accidentales. |
| **Rol del Usuario** | Usuario de la aplicación web |
| **Objetivo** | Permitir a los usuarios eliminar acciones que ya no desean mantener en la lista. |
| **Iteración Asignada** | No asignada (puede variar según la planificación del proyecto) |
| **Prioridad en Negocio** | Alta |
| **Riesgo en Desarrollo** | Baja |
| **Puntos Estimados** | 2 horas |
| **Puntos Reales** | 2 horas 30 minutos |
| **Beneficio Comercial** | Mejora la gestión de la lista de acciones y proporciona a los usuarios un control total sobre sus registros. |
| **Requisitos Previos** | Existencia de acciones registradas en la aplicación. |
| **Criterios de Aceptación** | 
   - El usuario puede acceder a una opción de eliminación desde la lista de acciones.
   - Se muestra una confirmación o alerta antes de proceder con la eliminación.
   - Al confirmar la eliminación, la acción se remueve inmediatamente de la lista de acciones.
| **Notas Técnicas** | La lógica de eliminación de la base de datos debe implementarse en el backend de la aplicación. |
| **Historial de Cambios** | Fecha: 2024-01-06 <br> Autor: David Averos |

