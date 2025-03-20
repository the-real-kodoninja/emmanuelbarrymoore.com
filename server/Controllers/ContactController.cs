using Microsoft.AspNetCore.Mvc;

[Route("api/[controller]")]
[ApiController]
public class ContactController : ControllerBase
{
    [HttpPost]
    public ActionResult Post([FromBody] object data) // Adjust type as needed
    {
        return Ok("Contact received");
    }
}
