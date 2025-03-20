using Microsoft.AspNetCore.Mvc;
using PortfolioApi.Models;
using PortfolioApi.Data; // Add this

[Route("api/[controller]")]
[ApiController]
public class AboutController : ControllerBase
{
    private readonly PortfolioContext _context;

    public AboutController(PortfolioContext context)
    {
        _context = context;
    }

    [HttpGet]
    public ActionResult<IEnumerable<About>> Get()
    {
        return _context.Abouts.ToList();
    }
}
