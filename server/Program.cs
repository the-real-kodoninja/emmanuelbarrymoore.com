using Microsoft.EntityFrameworkCore;
using PortfolioApi.Data; // Ensure this matches the namespace in PortfolioContext.cs

var builder = WebApplication.CreateBuilder(args);

// Add services
builder.Services.AddControllers();
builder.Services.AddDbContext<PortfolioContext>(options =>
    options.UseNpgsql(builder.Configuration.GetConnectionString("DefaultConnection")));

// Force HTTP
builder.WebHost.UseUrls("http://localhost:5000");

var app = builder.Build();

if (!app.Environment.IsDevelopment())
{
    app.UseHttpsRedirection();
}

app.UseAuthorization();
app.MapControllers();

app.Run();
