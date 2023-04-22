use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumosTable extends Migration
{
    public function up()
    {
        Schema::create('consumos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('clube_id')->constrained()->cascadeOnDelete();
            $table->foreignId('recurso_id')->constrained()->cascadeOnDelete();
            $table->decimal('valor_consumo', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('consumos');
    }
}
